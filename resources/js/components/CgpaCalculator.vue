<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cart</div>
                    <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Price</td>
                                 <td>Qty</td>
                                 <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="number"  class="form-control"  v-model="item.price"></td>
                                <td><input type="number"  class="form-control"    v-model="item.qty"></td>
                                <td><button @click="addToCart()" class="btn btn-primary">Add</button></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>


                <div class="card mt-5">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Price</td>
                                 <td>Qty</td>
                                  <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="cartItem in this.cartItems" :key="cartItems.indexOf(cartItem)">
                                <td>{{cartItem.price}}</td>
                                <td>{{cartItem.qty}}</td>
                                <td>{{cartItem.qty * cartItem.price}}</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data(){
           return {
              item:{
                  price: 1,
                  qty: 1,

              },
              cartItems:[],
           }
       },
        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            addToCart(){
                this.cartItems.push(this.item);
            }
        },
        computed:{
            total(){
                return parseFloat(this.item.price) * parseFloat(this.item.qty);
            }
        }
    }
</script>
