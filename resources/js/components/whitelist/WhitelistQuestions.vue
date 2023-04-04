<template>
    <div>
        <whitelist-question v-for="no in [1, 2, 3]" :key="no" />
    </div>
</template>

<script>
import WhitelistQuestion from "./WhitelistQuestion";
export default {
    components: {
        WhitelistQuestion
    }
};
</script>

<style></style>
