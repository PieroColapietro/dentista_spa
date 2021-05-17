<template>
  <div class="container">
    <div class="col-12 col-md-12">
      <div class="row justify-content-center">
        <div class="col-md-4 my-5">
          <div class="card staff-card" style="width: 25rem">
            <div class="card-body">
              <div class="card-title mt-5">
                <h3 class="fs-3">{{ data.title }}</h3>
              </div>
              <div class="card-text">
                <h5>{{ data.description }}</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 my-5">
          <img :src="data.img" class="img-fluid rounded img-staff" style="width: 40rem" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {};
  },
};
</script>

