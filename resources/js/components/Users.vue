<template>
    <div class="container">
        <!-- BEGIN::Row -->
        <div class="row mt-5">
            <div class="col-md-12">
            <!-- BEGIN::Card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users Table</h3>

                    <div class="card-tools">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addNew">Add New <i class="fas fa-user-plus fa-fw"></i></button>
                    </div>
                </div>
                <!-- BEGIN::Table -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Type</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Modify</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                        <td scope="row">{{user.id}}</td>
                        <td>{{user.name}}</td>
                        <td>{{user.email}}</td>
                        <td>{{user.type | upText}}</td>
                        <td>{{user.created_at | myDate}}</td>
                        <td>
                            <a href="#">
                                <i class="fas fa-edit orange"></i>
                            </a>
                            <i class="fas fa-grip-lines-vertical"></i>
                            <a href="#">
                                <i class="fas fa-trash red"></i>
                            </a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- END::Table -->
            </div>
            <!-- END::Card -->
            </div>
        </div>
        <!-- END::Row -->

        <!-- BEGIN::Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewTitle">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- BEGIN::Form -->
                <form @submit.prevent="createUser">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.name" type="text" name="name" id="name" placeholder="Name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.email" type="email" name="email" id="email" placeholder="Email Address" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="form-group">
                        <textarea v-model="form.bio" name="bio" id="bio" placeholder="Short Bio for User (Optional)" class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }">
                        </textarea>
                        <has-error :form="form" field="bio"></has-error>
                    </div>
                    <div class="form-group">
                        <select v-model="form.type" name="type" id="type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                            <option value="">Select User Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">Standard User</option>
                            <option value="author">Author</option>
                        </select>
                        <has-error :form="form" field="type"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.password" type="password" name="password" id="password" placeholder="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error :form="form" field="password"></has-error>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                </form>
                <!-- END::Form -->
                </div>
            </div>
        </div>
        <!-- END::Modal -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: {},
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },
        methods: {
            loadUser() {
                axios.get('api/user').then(({ data }) => (this.users = data.data));
            },
            createUser() {
                this.$Progress.start();
                this.form.post('api/user');
                $('#addNew').modal('hide');
                Toast.fire({
                    icon: 'success',
                    title: 'User Created Successfully'
                })
                this.$Progress.finish();
            }
        },
        created() {
            this.loadUser();
        }
    }
</script>
