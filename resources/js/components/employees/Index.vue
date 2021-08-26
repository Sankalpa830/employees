<template>
    <div>
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Employees</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="alert alert-success">

                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" name="search" placeholder="Search Country" aria-label="Search">
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
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-success" >
                                        Edit
                                        </a>
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

}
</script>

<style>

</style>