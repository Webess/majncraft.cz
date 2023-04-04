<template>
    <div class="step1">
        <p>
            Whitelist test spustíš vyplněním tvého jména ve hře a
            stisknutím tlačítka Spustit test. Po ověření, zda máš
            zakoupený Minecraft budeš připuštěn k testu a spustí se 10
            minutový časovač na dokončení testu.
        </p>
        <div class="field">
            <div class="field has-addons">
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        placeholder="Tvé jméno ve hře"
                        v-model="username"
                    />
                </div>
                <div class="control">
                    <button
                        class="button is-light"
                        :class="{ 'is-loading': isLoading }"
                        @click="startTest"
                        :disabled="isDisabled"
                    >
                        Spustit test
                    </button>
                </div>
            </div>
            <span class="help tag is-success" v-if="!hasError">
                Výborně! Máš zakoupen Minecraft, když budeš připraven
                můžeš spustit test.
            </span>
            <span class="help tag is-danger" v-if="hasError">
                Uživatelské jméno musí mít alespoň dva znaky a musí na
                něj být zakoupen Minecraft.
            </span>
        </div>
    </div>
</template>

<script>
import axios from "axios";

const CancelToken = axios.CancelToken;
let cancel;
export default {
    data() {
        return {
            username: null,
            uuid: null,
            hasError: true,
            isLoading: false,
        };
    },
    computed: {
        isDisabled() {
            return this.hasError;
        }
    },
    methods: {
        startTest() {
            this.$emit('name-checked', 1)
        },
    },
    watch: {
        username() {
            if (cancel !== undefined) {
                cancel();
            }

            this.isLoading = true;
            this.hasError = true;
            this.username = _.trimStart(_.trimEnd(this.username));

            axios.post("/whitelist/checkName",
                    {
                        username: this.username
                    },
                    {
                        cancelToken: new CancelToken(function executor(c) {
                            cancel = c;
                        })
                    }
                )
                .then(result => {
                    this.hasError = result.data.hasError;
                    this.username = result.data.user.name;
                    this.uuid = result.data.user.id;

                    this.isLoading = false;
                })
                .catch(err => {
                    if (axios.isCancel(err)) {
                        console.log("Request canceled", err.message);
                    } else {
                        // handle error
                    }
                });
        }
    }
}
</script>
