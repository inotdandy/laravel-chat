<template>
    <div class="contact-list">
        <ul>
            <li v-for="contact in contacts" :key="contact.id">
                <div class="avatar">
                    <img :src="contact.profile_image" :alt="contact.name">
                </div>
                <div class="details">
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
    props: {
        contacts: {
            type: Array,
            default: null
        }
    }
}
</script>