import React from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { increment, decrement } from '../actions';

function Counter() {

    const counter = useSelector(state => state.counter);
    const dispatch = useDispatch();

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">
                            <div className="display-1 text-center">
                                { counter }
                            </div>
                        </div>

                        <div className="card-body d-flex justify-content-around">
                            <button
                                onClick={() => dispatch(increment(1))}
                                className="display-2"
                            >
                                +
                            </button>
                            <button
                                onClick={() => dispatch(decrement(1))}
                                className="display-2"
                            >
                                -
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Counter;
