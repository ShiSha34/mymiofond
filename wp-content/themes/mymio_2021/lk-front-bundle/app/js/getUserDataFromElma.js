'use strict';

const elmaUserId = $('#elma-id').html();
const apiUrl = `https://aeqlmvgvlxcee.elma365.ru/api/extensions/3d15932c-766e-4e91-b8ff-fed442649de2/script/get/appgs?id=${elmaUserId}`;

(async function() {
    try {
        const rawData = await getUserDataFromElma(apiUrl);
        const data = await rawData.json();
        const dataArray = await Object.entries(data);

        for (const [key, value] of dataArray) {
            const el = $(`[data-info=${key}]`);
            el.html(value);
        }
    } catch (e) {
        //TODO: не удалось получить данные.
        console.log(e);
        throw e;
    }
})();

async function getUserDataFromElma(url) {
    return await fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-Token': '8657d620-f5eb-4552-997d-d3ec43688c29',
        }
    })

}