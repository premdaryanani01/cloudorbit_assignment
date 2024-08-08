<template>
    <div>
        <h3>Invoice List</h3>
    </div>
    <ul v-if="invoicesList">
        <li class="invoiceItem">
            <p><b>ID</b></p>
            <p><b>Invoice Number</b></p>
            <p><b>Client Name</b></p>
            <p><b>Amount</b></p>
        </li>
        <template v-for="invoiceItem in invoicesList" v-bind:key="invoiceItem.id">
            <li class="invoiceItem">
               <p> {{ invoiceItem.id }}</p>
               <p> {{ invoiceItem.invoice_number }}</p>
               <p> {{ invoiceItem.client_name }}</p>
               <p> {{ invoiceItem.amount }}</p>
            </li>
        </template>
    </ul>
</template>
<style>
    li.invoiceItem {
        display:flex;
        flex-direction:row;
        gap:1rem;
        justify-content:space-around;
        max-width:70%;
        margin: auto;
        border:1px solid #2c2c2c;
        border-collapse:collapse;
    }
    li p{
        /* border:1px solid #2c2c2c */
    }

</style>
<script>
import axios from 'axios';

export default {
    name: 'InvoicesIndex',
    data() {
        return {
            invoicesList: {}
        }
    },
    created() {
        console.log("the invoiceindex component is created");
        axios.get('api/invoices')
        .catch(function (error) {
            if (error.response) {
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
            } else if (error.request) {
            console.log(error.request);
            } else {
            console.log('Error', error.message);
            }
            console.log(error.config);
        })
        .then(
            response => this.invoicesList = JSON.parse(response.data.data)
        );
    },
    mounted() {
        console.log('Vue component mounted!');
    }
}
</script>
