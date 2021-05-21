<template>
  <div class="feed">
    <ul v-if="contact">
      <li
        v-for="message in messages"
        :class="`message ${message.to == contact.id ? 'sent' : 'received'}`"
        :key="message.id"
      >
        <div class="text">
          {{ message.text }}
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    messages: {
      type: Array,
      default: [],
    },
    contact: {
      type: Object,
    },
  },
};
</script>

<style scoped>
.feed{
  height: 100%;
  max-height: 740px;
  overflow: scroll;
  background: #f5f2f2;
}
.feed ul{
  list-style: none;
  padding: 5px;
}
.feed li.message{
  width: 100%;
  margin: 10px 0;
}
li .text{
  max-width: 200px;
  border-radius: 5px;
  padding: 12px;
  display: inline-block;
}
li.message.received{
  text-align: right;
}
.received .text{
  background: #b2b2b2;
}

li.message.sent{
  text-align: left;
}
.sent .text{
  background: #81c4f9;
}
</style>