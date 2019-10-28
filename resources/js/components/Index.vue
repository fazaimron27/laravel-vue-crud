<template>
  <div class="card">
    <div class="card-header">
      <router-link to="/create" class="btn btn-sm btn-outline-primary float-right">Create New Post</router-link>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th width="100"></th>
            <th width="100"></th>
            <th width="100"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lorem ipsum</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            <td>
              <button class="btn btn-sm btn-outline-primary">View</button>
            </td>
            <td>
              <button class="btn btn-sm btn-outline-success">Edit</button>
            </td>
            <td>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>