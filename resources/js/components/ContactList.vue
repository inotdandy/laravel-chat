<template>
  <div class="contact-list">
    <ul>
      <li
        v-for="(contact, index) in contacts"
        :key="contact.id"
        @click="selectContact(index, contact)"
        :class="{ 'selected': selected == index }"
      >
        <div class="avatar">
          <img :src="contact.profile_image" :alt="contact.name" />
        </div>
        <div class="contact">
          <p class="name">{{ contact.name }}</p>
          <p class="email">{{ contact.email }}</p>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "ContactList",
  data() {
    return {
      selected: 0,
    };
  },
  props: {
    contacts: {
      type: Array,
      default: null,
    },
  },
  methods: {
    selectContact(index, contact) {
      this.selected = index;
      this.$emit("selectedContact", contact);
    },
  },
};
</script>

<style scoped>
.contact-list {
  flex: 2;
  max-height: 600px;
  overflow: scroll;
  border-left: 1px solid #ccc;
}
.contact-list ul {
  list-style-type: none;
  padding: 0;
}
.contact-list ul li {
  display: flex;
  padding: 2px;
  height: 80px;
  position: relative;
  cursor: pointer;
  border-bottom: 1px solid #ccc;
}
li.selected {
  background: #ccc;
}
.contact-list .avatar {
  display: flex;
  align-items: center;
  flex: 1;
}
.avatar img {
  width: 35px;
  margin: 0 auto;
  border-radius: 50%;
}
.contact {
  flex: 3;
  font-size: 10px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
p {
  margin: 0;
}
p.name {
  font-weight: bold;
}
</style>