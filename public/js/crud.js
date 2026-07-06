const search = document.getElementById("search");
const tableBody = document.getElementById("tableBody");
const clearBtn = document.getElementById("clearBtn");
const form = document.querySelector(".textCenter");
const originalTable = tableBody.innerHTML;

form.addEventListener("submit", function(e){
    e.preventDefault();
});

search.addEventListener("input", async function () {
    let value = this.value.trim();

    if (value === "") {
        tableBody.innerHTML = originalTable;
        return;
    }

    const response = await fetch(`/api/employees/search/${value}`);
    console.log(response.status);
    const data = await response.json();
    tableBody.innerHTML = "";

    data.forEach((employee) => {
        tableBody.innerHTML += `
            <tr>
                <td>${employee.id}</td>
                <td>${employee.name}</td>
                <td>${employee.employeeId}</td>
                <td>${employee.designation}</td>
<td>
    <a href="/employees/${employee.id}/edit">
        <img src="/images/edit.png" alt="Edit" class="actionImg" title="Edit">
    </a>

    <form action="/employees/${employee.id}" method="POST" class="empForm">
        <button type="submit" class="deleteBtn">
            <img src="/images/delete.png" alt="Delete" class="actionImg" title="Delete">
        </button>
    </form>
</td>
            </tr>
        `;
    });
});

clearBtn.addEventListener("click", () => {
    search.value = "";
    tableBody.innerHTML = originalTable;
});

