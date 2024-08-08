import { createStore } from 'vuex';

export default createStore({
    state: {
        // Define your state properties here
        count: 0
    },
    mutations: {
        // Define your mutation methods here
        increment(state) {
            state.count++;
        },
        setCount(state, value) {
            state.count = value;
        }
    },
    actions: {
        // Define your action methods here
        increment({ commit }) {
            commit('increment');
        },
        setCount({ commit }, value) {
            commit('setCount', value);
        }
    },
    getters: {
        // Define your getter methods here
        count: state => state.count
    }
});
