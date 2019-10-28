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
          <tr v-for="(post, index) of posts" v-bind:key="index">
            <td>{{post.title}}</td>
            <td>{{post.description}}</td>
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

<script>
export default {
  data() {
    return {
      posts: [],
      errors: []
    };
  },

  created() {
    axios
      .get("/posts")
      .then(response => {
        this.posts = response.data;
      })
      .catch(e => {
        this.errors.push(e);
      });
  }
};
</script>