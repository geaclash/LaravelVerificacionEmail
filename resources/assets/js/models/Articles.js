export default {

    fetch(context) {
        
        return axios.get('api/articles').then((data) => {
            //console.log(data.data);
            context.articles = data.data.data;
            context.pagination = data.data.pagination;
        });
    }

}
