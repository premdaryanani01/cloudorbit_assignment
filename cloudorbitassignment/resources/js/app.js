import { createApp } from 'vue';
import AppLayout from './components/AppLayout.vue';
import router from './router'; // Import the updated router

const app = createApp(AppLayout);

// Enable Vue Devtools in development mode
if (import.meta.env.MODE === 'development') {
    app.config.devtools = true;
}

app.use(router); // Use the router instance
app.mount('#app');
