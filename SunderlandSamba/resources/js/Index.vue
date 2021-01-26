<template>
    <div>
        <nav class="navbar border-bottom navbar-light bg-light">
            <router-link class="navbar-brand mr-auto" :to="{name: 'home'}"><img src="img/logo.png" height="65px" width="65px"> Sunderland Samba</router-link>
            <router-link class="btn nav-button" :to="{name: 'player'}">Player</router-link>
        </nav>
        <div class="container mt-4 mb-4 pr-4 pl-4">
            <router-view></router-view>
        </div>
    </div>
</template>
