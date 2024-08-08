<template>
    <div class="">
        <h3>Add an invoice </h3>
    </div>
    <div>
        <form @submit.prevent="addItem">

                <p><input v-model="invoice_num" placeholder="Invoice Number" type="text" name="invoice_num" id=""></p>
                <p><input v-model="client_name" placeholder="Client Name" type="text" name="client_name" id=""></p>
                <p><input v-model="amount" placeholder="Amount" type="text" name="amount" id=""></p>
                <p><button type="submit" value="Insert"> Insert</button></p>

        </form>
    </div>
</template>
<script>
import axios from 'axios';
    export default {
    name: "InsertInvoicePage",
    data() {
        return {
            invoice_num: null,
            client_name: null,
            amount: null
    }},
    methods: {
        addItem() {
            axios.post('/api/invoices', {
                invoice_number: this.invoice_num,
                client_name: this.client_name,
                amount: this.amount
            })
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
                .then(console.log("done!"));
            }
        }
    }
</script>
<style>
form {
  place-content: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
