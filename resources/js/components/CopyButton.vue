<template>
    <div>
        <button @click="copyToClipboard" class="button is-accent is-medium">Chci si zahrát!</button>
    </div>
</template>

<script>
export default {
    name: "CopyButton",
    methods: {
        copyToClipboard() {
            var text = "s.majncraft.cz";
            navigator.clipboard.writeText(text).then(function() {
            }, function(err) {
            });
        }
    },
};
</script>
