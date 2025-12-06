// IP geolocation logging
function json(url) {
	return fetch(url).then(res => res.json());
}

let apiKey = '6c4bf0499e7506d316a833f0911c4306';
json('https://api.ipdata.co?api-key=${apiKey}').then(data => {
	console.log(data.ip);
	console.log(data.city);
	console.log(data.country_code);
});
