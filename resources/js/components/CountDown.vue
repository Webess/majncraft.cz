<template>
    <span>
        {{ minutes | two_digits }}:{{ seconds | two_digits }}
        <!-- <div class="block">
            <p class="digit">{{ days | two_digits }}</p>
        </div>
        <div class="block">
            <p class="digit">{{ hours | two_digits }}</p>
        </div>
        <div class="block">
            <p class="digit">{{ minutes | two_digits }}</p>
        </div>
        <div class="block">
            <p class="digit">{{ seconds | two_digits }}</p>
        </div> -->
    </span>
</template>

<script>
export default {
    mounted() {
        window.setInterval(() => {
            this.now = Math.trunc(new Date().getTime() / 1000);
        }, 1000);
    },
    props: {
        date: {
            type: String
        }
    },
    data() {
        return {
            emited: false,
            now: Math.trunc(new Date().getTime() / 1000)
        };
    },
    computed: {
        dateInMilliseconds() {
            return Math.trunc(Date.parse(this.date) / 1000);
        },
        seconds() {
            return (this.dateInMilliseconds - this.now) % 60;
        },
        minutes() {
            return Math.trunc((this.dateInMilliseconds - this.now) / 60) % 60;
        },
        hours() {
            return (
                Math.trunc((this.dateInMilliseconds - this.now) / 60 / 60) % 24
            );
        },
        days() {
            return Math.trunc(
                (this.dateInMilliseconds - this.now) / 60 / 60 / 24
            );
        }
    },
    watch: {
        now(newValue, oldValue) {
            if (this.dateInMilliseconds < this.now && !this.emited) {
                this.emited = true;
                this.$emit("done", true);
            }
        }
    },
    filters: {
        two_digits: value => {
            if (value < 0) {
                return "00";
            }
            if (value.toString().length <= 1) {
                return `0${value}`;
            }
            return value;
        }
    }
};
</script>

<style></style>
