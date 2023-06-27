var token = 'pvCnx@g417uoCJD9tRRJ';
var target = '628814062549';

document.getElementById('btnRequestAPI').addEventListener('click', function () {
    (async () => {
        const data = new FormData()
        data.append("target", target)
        data.append("message", "kirim dari js")
        data.append("url", "https://md.fonnte.com/images/wa-logo.png")
        //data.append("filename", "filename.pdf")
        //data.append("schedule", "0")
        //data.append("delay", "2")
        //data.append("countryCode", "62")
        //data.append("buttonJSON", '{"message":"fonnte button message","footer":"fonnte footer message","buttons":[{"id":"mybutton1","message":"hello fonnte"},{"id":"mybutton2","message":"fonnte pricing"},{"id":"mybutton3","message":"tutorial fonnte"}]}')
        //data.append("templateJSON", '{"message":"fonnte template message","footer":"fonnte footer message","buttons":[{"message":"fonnte","url":"https://fonnte.com"},{"message":"call me","tel":"6282227097005"},{"id":"mybutton1","message":"hello fonnte"}]}')
        //data.append("listJSON", '{"message":"fonnte list message","footer":"fonnte footer message","buttonTitle":"fonnte\'s packages","title":"fonnte title","buttons":[{"title":"text only","list":[{"message":"regular","footer":"10k messsages/month","id":"list-1"},{"message":"regular pro","footer":"25k messsages/month","id":"list-2"},{"message":"master","footer":"unlimited messsages/month","id":"list-3"}]},{"title":"all feature","list":[{"message":"super","footer":"10k messsages/month","id":"list-4"},{"message":"advanced","footer":"25k messsages/month","id":"list-5"},{"message":"ultra","footer":"unlimited messsages/month","id":"list-6"}]}]}')

        const response = await fetch("https://api.fonnte.com/send", {
            method: "POST",
            mode: "cors",
            headers: new Headers({
                Authorization: token,
            }),
            body: data,
        });

        const res = await response.json();
        document.write(JSON.stringify(res))
    })()
})