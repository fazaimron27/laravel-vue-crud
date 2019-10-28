<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header">Edit Post</div>

          <div class="card-body">
            <form v-on:submit="submitPostEdit()">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="posts.title" class="form-control" placeholder="Title" />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea
                  class="form-control"
                  v-model="posts.description"
                  placeholder="Description"
                  rows="5"
                ></textarea>
              </div>
              <div class="form-group">
                <router-link to="/" class="btn btn-outline-danger">Back</router-link>
                <button class="btn btn-outline-success float-right">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      posts: {
        title: "",
        description: ""
      },
      errors: []
    };
  },
  created() {
    let id = this.$route.params.id;
    axios
      .get("/posts/" + id + "/edit")
      .then(response => {
        this.posts = response.data;
      })
      .catch(e => {
        this.errors.push(e);
      });
  },
  methods: {
    submitPostEdit() {
      let id = this.$route.params.id;
      axios
        .patch("/posts/" + id, this.posts)
        .then(response => {
          this.$router.push({ path: "/" });
          this.posts = response.data;
        })
        .catch(e => {
          this.errors.push(e);
        });
    }
  }
};
</script>
