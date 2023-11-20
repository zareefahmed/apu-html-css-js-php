class myDb{
    constructor(){

    }

    prepareSave(){
        var myvar=this;
        this.collectionName="items";
        const request = indexedDB.open("itemsDB", 1);
            request.onsuccess = function(event) {
                myvar.db = event.target.result;
                    let userInfo=getUserInfo();
                myvar.saveItem(userInfo);
};
    }
    

    saveItem(Info){
             const transaction = this.db.transaction(["items"], "readwrite");
            const store = transaction.objectStore("items");
           store.add(Info);
    }
}