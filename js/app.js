const nav = document.querySelector('nav')

nav.addEventListener('click', function () {
    this.classList.toggle('active')
    document.querySelector('.menu').classList.toggle('active')
})

sendRequest('/server/server.php?is_ajax=true')
    .then(data => showData(data))

async function sendRequest(url) {
    const res = await fetch(url)
    if (res.ok) return res.json()
}

function showData(data) {
    const menuList = document.querySelectorAll('ul > li')
    menuList.forEach(function (item) {
        item.addEventListener('click', function () {
            let idx = this.getAttribute('data-office')
            let tableBody = document.querySelector('.table-body')
            tableBody.innerHTML = ''
            if (data[idx].length > 0)
                renderData(idx, data[idx], tableBody)
            else
                tableBody.insertAdjacentHTML('beforeend', '<p>В данной группе нет информации</p>')
        })
    })
}

function renderData(office, data, element) {
    data.forEach(item => element.insertAdjacentHTML('beforeend', renderRow(item, office)))
}

function renderRow(item, office) {
    return `<div class="table-row">
                <div class="table-cell">${office.replace('_', ' ')}</div>
                <div class="table-cell">${item.contractor}</div>
                <div class="table-cell">${item.amount}</div>
            </div>`
}
