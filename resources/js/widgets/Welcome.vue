<script setup>
import { ref, computed, onMounted } from 'vue';

defineProps({
	newsCollectionUrl: String,
	pagesCollectionUrl: String,
	assetsUrl: String,
});

const expiry = ref(null);
const remaining = ref(null);

const time = computed(() => {
	const days = Math.floor(remaining.value / 86400);
	const daysRemaining = remaining.value % 86400;
	const hours = Math.floor(daysRemaining / 3600);
	const hoursRemaining = daysRemaining % 3600;
	const minutes = Math.floor(hoursRemaining / 60);
	const seconds = hoursRemaining % 60;

	return {
		days: format(days),
		hours: format(hours),
		minutes: format(minutes),
		seconds: format(seconds),
	}
});

const setRemaining = () => {
	const diff = expiry.value - new Date().getTime();
	remaining.value = Math.max(0, parseInt(diff / 1000));
};

const format = (value) => {
	return ("0" + parseInt(value)).slice(-2);
};

onMounted(() => {
	const when = new Date();
	when.setMinutes(Math.ceil(when.getMinutes() / 30) * 30);
	expiry.value = when.getTime();
	setRemaining();

	setInterval(() => {
		setRemaining();
	}, 1000);
});
</script>

<template>
	<ui-empty-state-menu
		heading="👋 &nbsp; Welcome to the Statamic Demo site!"
		:subheading="`Go bananas with it because it will reset in: ${time.minutes}:${time.seconds}`"
	>
		<ui-empty-state-item
			:href="newsCollectionUrl"
			icon="media-news-paper"
			heading="Manage News"
			description="Publish and edit news articles using <em>Bard</em>, our wonderful rich text editor."
		></ui-empty-state-item>

		<ui-empty-state-item
			:href="pagesCollectionUrl"
			icon="tree-expand"
			heading="Manage Pages"
			description="Add, edit, delete, and rearrange the site's pages."
		></ui-empty-state-item>

		<ui-empty-state-item
			:href="assetsUrl"
			icon="assets"
			heading="Check out the Asset Manager"
			description="Get a feel what what it's like to upload and manage images, files, and directories."
		></ui-empty-state-item>

		<ui-empty-state-item
			href="/"
			icon="visit-website"
			heading="View the Front-end"
			description="Take a look at the front-end of the site to see how your Control Panel edits have affected it."
		></ui-empty-state-item>
	</ui-empty-state-menu>
</template>