<template>
    <div class="hero is-primary is-bold is-whitelist has-border-radius">
        <div class="hero-body">
            <h2 class="title pb-3">Whitelist test</h2>
            <name-check v-if="step === 1" v-on:name-checked="this.startTest" />
            <div class="step2" v-if="step === 2 && timeout === false">
                <p>
                    Spustil si whitelist test pro hráče
                    <strong>{{ username }}</strong
                    >. Máš 10 minut na to, aby si správně odpověděl na osm z
                    deseti otázek. Po uplynutí času se test automaticky vypne a
                    budeš ho moci znovu spustit až o hodinu. Zbývající čas si
                    můžeš prohlédnout níže.
                </p>
                <p>
                    Zbývající čas:
                    <strong
                        ><count-down
                            :date="countdownDate"
                            @done="onCountdownDone"
                    /></strong>
                </p>
                <whitelist-questions />
            </div>
            <div class="timeout" v-if="timeout === true">
                <p>
                    Tvůj čas vypršel. Můžeš to skusit znovu o hodinu.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import CountDown from "../CountDown";
import WhitelistQuestions from "./WhitelistQuestions";
import axios from "axios";
import NameCheck from './NameCheck.vue';

const CancelToken = axios.CancelToken;
let cancel;
export default {
    components: {
        CountDown,
        WhitelistQuestions,
        NameCheck,
    },
    data() {
        return {
            countdownDate: "2100-01-01 00:00:00",
            username: null,
            uuid: null,
            step: 1,
            hasError: true,
            hasSuccess: false,
            isLoading: false,
            timeout: false
        };
    },
    methods: {
        startTest() {
            if (cancel !== undefined) {
                cancel();
            }

            this.step = 2;

            axios
                .post(
                    "/whitelist/startTest",
                    {
                        username: this.username,
                        uuid: this.uuid
                    },
                    {
                        cancelToken: new CancelToken(function executor(c) {
                            cancel = c;
                        })
                    }
                )
                .then(result => {
                    this.hasError = result.data.hasError;
                    this.hasSuccess = !result.data.hasError;
                    this.isLoading = false;
                    this.countdownDate = result.data.attempt_ends;
                    this.timeout = result.data.can_continue_attempt == 0;
                })
                .catch(err => {
                    if (axios.isCancel(err)) {
                        console.log("Request canceled", err.message);
                    } else {
                        // handle error
                    }
                });
        },
        onCountdownDone(e) {
            this.timeout = true;
        }
    },
    computed: {
        isDisabled() {
            return this.hasError && !this.hasSuccess;
        }
    },
};
</script>
