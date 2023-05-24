<template>
    <div class="box">
    	<Changer :onClick="loadEpisodes"/>
    	<div class="content">
    		<Episode v-for="episode in episodes" v-bind="episode" v-bind:key="episode.id"></Episode>
    	</div>
    </div>
</template>

<script>
	import Episode from '../components/Episode.vue'
	import Changer from '../components/Changer.vue'

    export default {
		components: {
            Episode,
			Changer
        },
        mounted() {
            this.loadEpisodes();
        },
        data() {
            return {
                episodes: [],
            }
        },
        methods: {
            async loadEpisodes(season) {
				season = season ?? this.$route.params.season ?? 1;
                let response = await axios.get(`/api/season/${season}`);
                this.episodes = response.data;
            },
        },
        watch: {
            $route(to, from) {
                this.loadEpisodes()
            }
        }
    }
</script>
