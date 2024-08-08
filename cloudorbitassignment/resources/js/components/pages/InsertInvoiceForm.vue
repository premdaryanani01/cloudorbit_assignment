<template>
    <div class="">
        <h3>Add an invoice </h3>
    </div>
    <div>
        <form v-on:submit.prevent="addItem">
            <p>
                <input v-bind="invoice_num" type="text" name="invoice_num" id="">
            </p>
            <p>
                <input v-bind="client_name" type="text" name="client_name" id=""></p>
            <p>
                <input v-bind="amount" type="number" name="amount" id="">
            </p>
        </form>
    </div>
</template>
<script>
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
            }).then(console.log("done!"));
            }
        }
    }
</script>
