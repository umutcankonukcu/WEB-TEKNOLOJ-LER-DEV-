const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': '16400a9546mshe0727e1ddd8c76bp1c0d13jsn94d7fad89817'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=spiderman', options)
	

    .then(response => response.json())
    .then(data => {
        const list = data.d;

        list.map((item) => {
            const name = item.l;
            const poster = item.i.imageUrl;
            const movie = `<li><img src="${poster}"> <h2>${name}</h2></li>`
            document.querySelector('.Movies').innerHTML += movie;
        })
    })
	.catch(err => {
        console.error(err);
    });




    