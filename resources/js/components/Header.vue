<template>
    <div class="card-header" v-text="title">Welcome</div>
</template>

<script>
export default {
    name: "Header",
    props: ["title"],
};
</script>

