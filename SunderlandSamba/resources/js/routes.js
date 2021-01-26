import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent";
import Player from "./components/Player";

const routes = [{
        path: "/",
        component: ExampleComponent,
        name: 'home',
    },
    {
        path: "/player",
        component: Player,
        name: 'player'
    }
];

const router = new VueRouter({
    routes,
    mode: 'history',
});

export default router;
