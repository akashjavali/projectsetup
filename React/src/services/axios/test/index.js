import axios from '../../index'

export const getData = () => {
    return axios.get(`https://jsonplaceholder.typicode.com/users`)
        .then(res => res.data)
        .catch(e => e.response.data)
}