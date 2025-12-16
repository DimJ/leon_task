<div id="users_modal" >

    <button class="btn btn-xs btn-primary" @click="addUser()" v-if="status=='show'" >Add</button>

    <br><br>

    <table class="table table-striped table-bordered table-hover dataTables-example" v-if="users.length>0 && status=='show'">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="(user, index) in users" v-bind:key="index" >
                <td><span v-html="user.name" ></span></td>
                <td><span v-html="user.email" ></span></td>
                <td style="text-align:center;" >
                    <button class="btn btn-xs btn-warning" @click="sendMailChimpUser(user.email)" ><img src="https://cdn-images.mailchimp.com/product/brand_assets/logos/mc-freddie-dark.svg" width="33" height="30" /></button>
                    &nbsp;
                    <button class="btn btn-xs btn-danger" @click="deleteUser(user.name)" >Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <div v-if="status=='add'" >

        <div class="row" >
            <div class="col-12 col-sm-6" >
                <input type="text" class="form-control" placeholder="New Name" v-model="new_name" />
            </div>
            <div class="col-12 col-sm-6" >
                <input type="text" class="form-control" placeholder="New Email" v-model="new_email" />
            </div>
        </div>

        <br>

        <div class="row" >
            <div class="col-12 col-sm-6" style="text-align:center;" >
                <button class="btn btn-xs btn-danger" @click="cancel()" >Cancel</button>
            </div>
            <div class="col-12 col-sm-6" style="text-align:center;" >
                <button class="btn btn-xs btn-success" @click="sendUser()" >Save</button>
            </div>
        </div>

    </div>

</div>

<script>

    new Vue({
        el: '#users_modal',
        data: () => ({
            status: 'show', // 'show', 'add'
            users:[],

            new_name: '',
            new_email: ''
        }),
        mounted() {
            this.getUsers()
        },
        methods: {

            getUsers(){
                var ref = this
                openNav()
                $.ajax({
                    type: 'GET',
                    async: true,
                    url: '<?php echo url('/'); ?>/getUsers',

                    success: function(response) {
                        closeNav()
                        ref.users = response.items
                    },
                    dataType: 'json'
                })
            },

            addUser(){
                this.new_name = ''
                this.new_email = ''
                this.status = 'add'
            },

            cancel(){
                this.status = 'show'
            },

            sendUser(){
                var ref = this
                openNav()
                $.ajax({
                    type: 'POST',
                    async: true,
                    url: '<?php echo url('/'); ?>/addUser',
                    data:{ _token:'{{ csrf_token() }}', name:this.new_name, email:this.new_email },
                    success: function(response) {
                        closeNav()
                        if(response.success){
                            ref.users = response.users
                            ref.status = 'show'
                        } else {
                            Toastify({
                                text: response.message,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "center", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "red",
                                },
                            }).showToast()
                        }
                    },
                    dataType: 'json'
                })
            },

            sendMailChimpUser(email){
                var ref = this
                openNav()
                $.ajax({
                    type: 'POST',
                    async: true,
                    url: '<?php echo url('/'); ?>/addMailChimpUser',
                    data:{ _token:'{{ csrf_token() }}', email:email },
                    success: function(response) {
                        closeNav()
                        if(response.success){
                            Toastify({
                                text: response.message,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "center", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "green",
                                },
                            }).showToast()
                        } else {
                            Toastify({
                                text: response.message,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "center", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "red",
                                },
                            }).showToast()
                        }
                    },
                    dataType: 'json'
                })
            },

            deleteUser(name){
                var ref = this
                openNav()
                $.ajax({
                    type: 'POST',
                    async: true,
                    url: '<?php echo url('/'); ?>/deleteUser',
                    data:{ _token:'{{ csrf_token() }}', name:name },
                    success: function(response) {
                        closeNav()
                        if(response.success){
                            ref.users = response.users
                            ref.status = 'show'
                        } else {
                            Toastify({
                                text: response.message,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "center", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "red",
                                },
                            }).showToast()
                        }
                    },
                    dataType: 'json'
                })
            }

        }
    });

</script>
