document.querySelectorAll('#plumpopupId').forEach((el) => el.remove());
            var s=document.createElement('script');s.type='text/javascript'; s.async=true;
            s.id = 'plumpopupId';
            s.src='https://app.plumpopup.com/storage/js/p-693.js';
            document.body.appendChild(s);