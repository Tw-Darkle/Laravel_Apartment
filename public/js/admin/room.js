const  checkStatus = document.querySelectorAll("checkStatus");

        const checkStatusRoom= statusRooms.textContent;
        if (statuspay === 'ติดจอง') {
            statusRooms.style.background = "#ffc107";
            statusRooms.style.color = "#000";
        } else if (statuspay === 'ห้องว่าง') {
            statusRooms.style.background = "#198754";
            statusRooms.style.color = "#fff";
        } else {
            statusRooms.style.background = "#dc3545";
            statusRooms.style.color = "#fff";
        }

