<template>
    <section class="hero has-background-black has-text-light has-text-centered">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-half is-offset-one-quarter">
                        <h2 class="title has-text-light">
                            Hlasuj pro náš server a získej odměnu
                        </h2>
                        <p>
                            Za jeden hlas získáš 5 XP levelů a 1 hlasovací bod
                            na Survival serveru. Hlasovat můžeš jednou za dvě
                            hodiny. Na nové kartě se ti otevře hlasovací portál.
                            Nezapomeň na něm potvrdit svůj hlas.
                        </p>
                        <div class="field has-addons is-justify-content-center">
                            <div class="control">
                                <input
                                    class="input"
                                    type="email"
                                    placeholder="Herní jméno"
                                    v-model="voteName"
                                />
                            </div>
                        </div>
                        <div class="buttons is-justify-content-center">
                            <a
                                :href="
                                    `https://czech-craft.eu/server/majncraft/vote/?user=${voteName}`
                                "
                                target="_blank"
                                class="button is-link"
                                ><i class="fad fa-vote-yea mr-3"></i>
                                Czech-Craft.cz</a
                            >
                            <a
                                :href="
                                    `https://craftlist.org/majncraft-cz?nickname=${voteName}`
                                "
                                target="_blank"
                                class="button is-light"
                                ><i class="fad fa-vote-yea mr-3"></i>
                                Craftlist.org</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "VoteList",
    data() {
        return {
            voteName: ""
        };
    }
};
</script>
