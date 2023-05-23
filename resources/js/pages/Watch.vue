<template>
    <div class="box">
		<Changer/>
		<div class="content">
			<div @click="back" style="display: flex; justify-self: start; padding-left: 5%; padding-top: 30px;">
				<button class="seria_watch_button" style="background-color: #d35400; color: #eeeeee; widows: auto; padding-left: none;">Назад</button>
			</div>
			<div class="seria" style="display: flex; justify-content: center; padding-top: 40px;">
				<iframe
                    width="560"
                    height="315"
                    style="border: solid #2ecc71 4px;"
                    :src=episode.url
                    frameborder="0"
                    allowfullscreen
                />
			</div>
            <p style="padding: 20px; color: white;">
                {{ episode.season }} Сезон {{ episode.episode }} Серия: {{ episode.title }}
            </p>
    	    <p style="padding: 20px; color: white;"> {{ episode.description }} </p>
			<div style="display: flex; justify-content: space-around; padding-top: 40px;">
				<button @click="previous" class="seria_watch_button">Предыдущая серия</button>
				<button @click="next" class="seria_watch_button">Следущая серия</button>
			</div>
		</div>
	</div>
</template>

<script>
	import Changer from '../components/Changer.vue'

    export default {
        components: {
			Changer
        },
        mounted() {
            this.loadEpisode();
        },
        data() {
            return {
                episode: {},
            }
        },
        methods: {
            async loadEpisode() {
                let params = this.$route.params;
                let response = await axios.get(`/api/season/${params.season}/episode/${params.episode}`);
                this.episode = response.data;
            },
            back() {
                this.$router.back()
            },
            previous() {
                this.$router.push(`/season/${this.season}/episode/${this.episode - 1}`)
            },
            next() {
                this.$router.push(`/season/${this.season}/episode/${this.episode + 1}`)
            },
        }
    }
</script>

