<template>
    <div>
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Employees</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div v-if="showMessage">
                            <div class="alert alert-success">
                                {{ message }}
                            </div>
                        </div>
                        
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-info ml-2" type="submit">Search</button>
                                    </form>
                                </div>
                                <div class="col-4 text-right">
                                    <router-link :to="{name:'EmployeeCreate'}" class=" btn btn-outline-info"> Create </router-link>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Department</th>
                                <th scope="col">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="employee in employees" :key="employee.id">
                                    <th scope="row">{{ employee.id }}</th>
                                    <td>{{ employee.first_name }}</td>
                                    <td>{{ employee.last_name }}</td>
                                    <td>{{ employee.address }}</td>
                                    <td>{{ employee.department.name }}</td>
                                    <td>
                                        <div class="row">
                                            <router-link :to="{ name:'EmployeeEdit', params:{id:employee.id}}" class="btn btn-success mr-1">
                                                Edit
                                            </router-link>
                                            <button class="btn btn-danger" @click="deleteEmployee(employee.id)">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            employees : [],
            showMessage: false,
            message : ''
        }
    },
    created() {

        this.getEmployees();
    },
    methods : {
        getEmployees() {
            axios.get('/api/employees')
                .then(res=>{
                    this.employees = res.data.data
                }).catch(error => {
                    console.log(error);
                })
        },
        deleteEmployee(id) {
            axios.delete('/api/employees/'+id)
                .then(res => {
                    this.showMessage = true;
                    this.message = res.data;
                    this.getEmployees();
                });
        }
    }
};
</script>

<style>
</style>