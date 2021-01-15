<template>
    <div class="card-expansion">
        <md-card class="my-5 mx-5">
            <md-card-media>
                <img src="img/nd.jpg" alt="Nathan Dodd Sunderland Samba">
            </md-card-media>

            <md-card-header>
                <div class="md-title">Nathan Dodd</div>
                <div class="md-subhead">Midfielder</div>
            </md-card-header>

            <md-card-expand>
                <md-card-actions md-alignment="right">

                    <md-card-expand-trigger>
                        <md-button class="md-icon-button">
                            <md-icon>keyboard_arrow_down</md-icon>
                        </md-button>
                    </md-card-expand-trigger>
                </md-card-actions>

                <md-card-expand-content>
                    <md-card-content>
                       Experienced midfielder, important team player, often taking extra responsibility when others are unwilling. Goal threat on a good day.
                    </md-card-content>
                </md-card-expand-content>
            </md-card-expand>
        </md-card>
    </div>
</template>

<script>
export default {
    name: 'CardExpansion'
}
</script>

<style lang="scss" scoped>
.card-expansion {
    height: 480px;
}

.md-card {
    width: 320px;
    margin: 4px;
    display: inline-block;
    vertical-align: top;
}
</style>
