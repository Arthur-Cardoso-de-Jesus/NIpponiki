function buscarAnime() {
    // Busca por onclick
    const busca = document.getElementById('buscaInput').value;
    
    if (resultadoBusca.childNodes.length === 0) {
      resultadoBusca.style.backgroundColor = "tranparent";
    } else {
      resultadoBusca.style.backgroundColor = "#3a3170";
    }

  
    // Url da Api por busca
    const url = `https://api.jikan.moe/v4/anime?q=${busca}`;
  
    // Solicita a Api
    fetch(url)
      .then(response => response.json())
      .then(data => {
        // Mostra os resultados
        const resultadoDiv = document.getElementById('resultadoBusca');
        resultadoDiv.innerHTML = '';
        
        //console.log(data.data);
  
        // Mostra CADA anime encontrado
        data.data.forEach(anime => {
            const title = document.createElement('h2');
            const title_japanese = document.createElement('h3');
            const description = document.createElement('p');
            const episodes = document.createElement('p');
            const status = document.createElement('p');
            const score = document.createElement('p');
            const year = document.createElement('p');
            const type = document.createElement('p');
            const season = document.createElement('p');
            const image = document.createElement('img');

            // Preenche o campo do html com CADA anime
            title.innerText = anime.title;
            title_japanese.innerText = anime.title_japanese;
            description.innerText = "Descrição: " + anime.synopsis;
            episodes.innerText = "Episódios: " + anime.episodes;
            status.innerText = "Status: " + anime.status;
            score.innerText = "Pontuação: " + anime.score;
            year.innerText = "Ano: " + anime.year;
            type.innerText = "Tipo: " + anime.type;
            season.innerText = "Temporada: " + anime.season;
            image.src = anime.images.jpg.image_url;

            // Adiciona o html a div "resultadoBusca"
           
           
            resultadoDiv.appendChild(title);
            resultadoDiv.appendChild(title_japanese);
            resultadoDiv.appendChild(description);
            resultadoDiv.appendChild(episodes);
            resultadoDiv.appendChild(status);
            resultadoDiv.appendChild(score);
            resultadoDiv.appendChild(year);
            resultadoDiv.appendChild(type);
            resultadoDiv.appendChild(season);
            resultadoDiv.appendChild(image);
        });
      })
      //Error que ta bugado mas fds
      .catch(error => {
        const errorText = document.createElement('p');
        errorText.innerText = 'Não foram encontrados resultados para a sua pesquisa.';
        resultadoDiv.appendChild(errorText);
        console.error('Erro:', error);
      });


  }


  const resultadoBusca = document.getElementById('resultadoBusca');


// if (resultadoBusca.childNodes.length === 0) {
//   resultadoBusca.style.backgroundColor = "tranparent";
// } else {
//   resultadoBusca.style.backgroundColor = "#3a3170";
// }