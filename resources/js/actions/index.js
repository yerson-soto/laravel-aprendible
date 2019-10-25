import { INCREMENT, DECREMENT } from './types';

export const increment = quantity => ({
    type: INCREMENT,
    payload: quantity
});

export const decrement = quantity => ({
    type: DECREMENT,
    payload: quantity
});
