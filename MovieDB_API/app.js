let body = document.querySelector('body');

const key = "c7bdda37a2ba81dce05c948bf57b042e";
const img_url = `https://image.tmdb.org/t/p/original/`;
const url = `https://api.themoviedb.org/4/list/5?page=1&api_key=${key}`

fetch(url, {
    method: 'get'
}).then(response => response.json()).then(results => {

    results.results.forEach(result => {
        /*CONTAINER FOREACH MOVIE -> append to $container*/
        let container = document.createElement('article');
        body.append(container);
        /*TITLE + POSTER + OVERVIEW -> append to container*/
        let h1 = document.createElement('h1');
        h1.textContent = result.original_title;
        container.append(h1);

        let img = document.createElement('img');
        img.src = img_url + result.poster_path;
        container.append(img);

        let para = document.createElement('p');
        para.textContent = result.overview;
        container.append(para);
    });
})