import React, { useEffect } from 'react'
import Button from '@mui/material/Button'
import { useDispatch, useSelector } from 'react-redux';

import { test_data } from '../../../redux/consts';
import { getData } from '../../../services/axios/test'

export default function Test() {

    const dispatch = useDispatch();
    let initial = useSelector((s) => s.test_data.initial);

    useEffect(() => {
        console.log(initial, "initial")
    }, [initial])


    const handleOnClickReduxData = () => {
        dispatch({
            type: test_data,
            payLoad: {
                initial: {
                    id: '1',
                    name: 'john',
                    email: 'john@john.com',
                },
            },
        });
    }

    const handleOnClickAxiosData = () => {
        getData().then(res => {
            console.log(res)
        })
    }


    return (
        <div>
            Testing components
            <br />
            <br />
            <Button variant="contained" color="success" onClick={handleOnClickReduxData} >
                Click to set redux state
            </Button>
            <br />
            <br />
            <Button variant="contained" color="info" onClick={handleOnClickAxiosData} >
                Click to get axios data
            </Button>
        </div>
    )
}
