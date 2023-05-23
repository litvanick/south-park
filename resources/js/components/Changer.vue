<template>
    <div class="changer">
    	<span>Смотреть</span>
    	<ul>
    		<li><div @click="openSeason(1)">1 Сезон</div></li>
    		<li><div @click="openSeason(2)">2 Сезон</div></li>
    	</ul>
    </div>
</template>

<script>
    export default {
        methods: {
            async openSeason(season) {
				this.$router.push(`/season/${season}`)
                this.onClick(season)
            },
        },
        props: {
            onClick: {
                type: Function,
                required: false,
                default: (_) => {},
            }
        }
    }
</script>
