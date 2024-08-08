import { createRouter, createWebHistory } from 'vue-router';
import MyFirstPage from './components/pages/myFirstVuePage.vue';
import InvoicesIndex from './components/pages/InvoicesIndexPage.vue';
import InvoiceInsertPage from './components/pages/InvoiceInsertPage.vue';
const routes = [
    {
        path: '/my-new-vue-route',
        component: MyFirstPage
    },
    {
        path: '/invoices-index',
        component: InvoicesIndex
    },{
        path: '/insert-new-invoice',
        component: InvoiceInsertPage
    }
];

const router = createRouter({
    history: createWebHistory(), // Use createWebHistory for history mode
    routes
});

export default router;
