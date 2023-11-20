class myStorage{

    constructor()
    {
        this.storageclass=localStorage;
    }

    setItem(itemName,ItemValue)
    {

        this.storageclass.setItem(itemName,ItemValue);
    }

    getItem(itemName){
        console.log(this.storageclass);
     return   this.storageclass.getItem(itemName);
    }

    setStorageType(storagetype){
        this.storageclass=storagetype;
    }
}

const  storage= new myStorage();
//storage.setStorageType(sessionStorage);