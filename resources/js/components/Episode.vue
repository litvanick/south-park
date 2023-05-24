<template>
    <div class="seria">
    	<div class="seria_header">
            <span style="padding-left: 20px;">
                {{ season }} Сезон {{ episode }} Серия: {{ title }}
            </span>
        </div>
    	<div class="seria-box">
    		<div
                class="seria_logo"
                :style="{
                    background: `url(${thumbnail}`,
                    backgroundRepeat: 'no-repeat',
                    backgroundSize: '100%',
                }"
            />
    		<p> {{ description }} </p>
    	</div>
    	<div style="display: flex; justify-content: flex-end; padding-right: 15px; padding-bottom: 15px">
            <button
                @click="watchEpisode"
                class="seria_watch_button"
            >Смотреть</button>
    	</div>
    </div>
</template>

<script>
    export default {
        props: {
            title: String,
            description: String,
            season: Number,
            episode: Number,
            url: String,
            thumbnail: String,
        },
        methods: {
            async watchEpisode() {
				this.$router.push(`/season/${this.season}/episode/${this.episode}`)
            },
        }
    }
</script>
