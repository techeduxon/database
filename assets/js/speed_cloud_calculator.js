/**
 * Things to do
 * -- TB bandwidth
 * -- 
*/

/**
 * Data
*/

const OS_TYPES = ['Windows_Server', 'Linux/BYOL']

const LINUX_SERVERS = {
    'SpeedServer-1':{
        cpu: 2,
        memory: 4,
        storage: 60,
        price: 599
    },
    'SpeedServer-2':{
        cpu: 4,
        memory: 8,
        storage: 60,
        price: 999
    },
    'SpeedServer-3':{
        cpu: 8,
        memory: 16,
        storage: 60,
        price: 1799
    },
    'SpeedServer-4':{
        cpu: 12,
        memory: 24,
        storage: 60,
        price: 2699
    },
    'SpeedServer-5':{
        cpu: 16,
        memory: 32,
        storage: 60,
        price: 3599
    },
    'SpeedServer-6':{
        cpu: 24,
        memory: 48,
        storage: 60,
        price: 4799
    },
    'SpeedServer-7':{
        cpu: 32,
        memory: 64,
        storage: 60,
        price: 6299
    },
    
};

const WINDOWS_SERVERS = {
    'SpeedServer-10':{
        cpu: 2,
        memory: 4,
        storage: 120,
        price: 1199
    },
    'SpeedServer-11':{
        cpu: 4,
        memory: 8,
        storage: 120,
        price: 1999
    },
    'SpeedServer-12':{
        cpu: 8,
        memory: 16,
        storage: 120,
        price: 3699
    },
    'SpeedServer-13':{
        cpu: 12,
        memory: 24,
        storage: 120,
        price: 5399
    },
    'SpeedServer-14':{
        cpu: 16,
        memory: 32,
        storage: 120,
        price: 7199
    },
    'SpeedServer-15':{
        cpu: 24,
        memory: 48,
        storage: 120,
        price: 11199
    },
    'SpeedServer-16':{
        cpu: 32,
        memory: 64,
        storage: 120,
        price: 14699
    }
}

const PRODUCT_FAMILY = {
    'SQL_Server_Web_Edition':'600',
    'SQL_Svr_Standard_Core': '6215',
    'SQL_Svr_Enterprise_Core' : '23216'
}

const MANAGED_SERVICES = {
    'Yes,_I_Need_Manged_Services_for_both_os_and_DB': 45000,
    'Yes,_I_Need_Managed_Services_for_DB' : 25000,
    'Yes,_I_Need_managed_Services_only_for_OS' : 20000,
    'No,_I_Don\'t_Need_managed_Services' : 0
}

/**
 * Prices
*/
const PRICE_BANDWIDTH = 399
const PRICE_STORAGE = 199
const PRICE_CPU = 79
const PRICE_MEMORY = 79

/**
 * Elements
*/

const getEle = (id) => document.getElementById(id)

// OS
const OS_ELE = getEle("os")

// Configuration
const CONFIGURATION_ELE = getEle("configuration")
const CONFIGURATION_PRICE_ELE = getEle("configuration-price")

// Bandwidth
const BANDWIDTH_BAR_ELE = getEle('bandwidth-bar')
const BANDWIDTH_DISPLAY_ELE  = getEle('bandwidth-display')

// Error Bandwidth
const BANDWIDTH_ERROR_ELE = getEle('error-bandwidth')
const BANDWIDTH_PRICE_ELE = getEle('bandwidth-price')

// Additional Storage
const STORAGE_COUNT_DISPLAY_ELE = getEle('storage-count-display')
const ADDITIONAL_STORAGE_ELE = getEle('additional-storage')
const ADDITIONAL_STORAGE_PRICE_ELE = getEle('additional-storage-price')
const ADDITIONAL_STORAGE_ERROR_ELE = getEle('error-storage')

// Additional CPUI
const ADDITIONAL_CPU_ELE = getEle('additional-cpu')
const ADDITIONAL_CPU_PRICE_ELE = getEle('additional-cpu-price')

// Additional Memory
const ADDITIONAL_MEMORY_ELE = getEle('additional-memory')
const ADDITIONAL_MEMORY_PRICE_ELE= getEle('additional-memory-price')

// WITH / WITHOUT SQL
const SQL_STATE = getEle('sql-state')

// Product Family
const PRODUCT_FAMILY_ELE = getEle('product-family')
const PRODUCT_FAMILY_OPTIONS_ELE = getEle('product-family-options')
const PRODUCT_FAMILY_PRICE_ELE = getEle('product-family-price')

// Managed Services
const MANAGED_SERVICES_ELE = getEle('managed-services')
const MANAGED_SERVICES_PRICE_ELE = getEle('managed-services-price')

// Total price
const TOTAL_PRICE = getEle('total-price')

// Addditional Items
const ADDITIONAL_ITEMS_MSG = getEle('additional-items-msg')
const ADDITIONAL_ITEMS = getEle('additional-items')
const ADDITIONAL_ITEMS_SERVER = getEle('additional-items-server')
/**
 * Functions
*/

const setOptions = (value,ele) => {
    
    /**
     * A common function used to set all the options
    */
    
    ele.innerHTML+= `<option value=${value}>${value.replaceAll('_',' ')}</option>`
}

const setConfiguration = (data) => {
    /**
     * A function to set configuration options based on the object that is passed
    */
    
    for(let i in data){
        let value = `${i} ${data[i].cpu}vCPU/${data[i].memory}GB Memory ${data[i].storage}GB OS SSD`
        setOptions(value, CONFIGURATION_ELE)
    }
}

const setOs = () => {
    OS_TYPES.map(val => setOptions(val, OS_ELE))
}

const setProductFamily = () => {
    for(let i in PRODUCT_FAMILY){
        setOptions(i, PRODUCT_FAMILY_OPTIONS_ELE )
    }
    
}

const setManagedServices = () => {
    // MANAGED_SERVICES
    MANAGED_SERVICES_ELE.innerHTML=''
    if(OS_ELE.selectedIndex === 0){
        setOptions('Select Managed Services Requirement',MANAGED_SERVICES_ELE)
        return
    }
    MANAGED_SERVICES_ELE.innerHTML=''
    if(SQL_STATE.selectedIndex === 0){
        let flag = 2;
        for (let i in MANAGED_SERVICES ){
            if(flag !==0){
                flag--
                continue;
            }
            setOptions(i,MANAGED_SERVICES_ELE )
        }
    } else {
        for (let services in MANAGED_SERVICES){
            setOptions(services, MANAGED_SERVICES_ELE)
        }
    }
    handleManagedServicesPrice()
}

const formatPrice = (value) => {
    
    /**
     * Value -> Integer or value that can be converted into a integer
     * Returns a formatted string to display price
    */
    
    const FORMATTER = new Intl.NumberFormat()
    return FORMATTER.format(parseInt(value))
}

const unFormatPrice = (price) => {
    return price.replaceAll(',','')
}

const setTotalPrice = () => {
    /**
     * The replace all function is being called to unformat the price
    */
    let parsePrice = (val) => {
        return parseInt(unFormatPrice(val.innerHTML))
    }
    
    let final_price = parsePrice(CONFIGURATION_PRICE_ELE) + parsePrice(BANDWIDTH_PRICE_ELE) + 
    parsePrice(ADDITIONAL_STORAGE_PRICE_ELE) + parsePrice(ADDITIONAL_CPU_PRICE_ELE) + parsePrice(ADDITIONAL_MEMORY_PRICE_ELE) + parsePrice(PRODUCT_FAMILY_PRICE_ELE) + parsePrice(MANAGED_SERVICES_PRICE_ELE)
    TOTAL_PRICE.innerHTML = formatPrice(final_price)
}

const handleAdditionalItems = () => {
    /**
     * Displays additional config based on the server selected
    */
    if(OS_ELE.selectedIndex === 1){
        ADDITIONAL_ITEMS_SERVER.innerHTML = 'SpeedServer-16'
    } else if (OS_ELE.selectedIndex === 2 ){
        ADDITIONAL_ITEMS_SERVER.innerHTML = 'SpeedServer-7'
    } else {
        ADDITIONAL_ITEMS_SERVER.innerHTML = 'Configuration of a'
        return
    }
    if(CONFIGURATION_ELE.selectedIndex === (CONFIGURATION_ELE.options.length-1)){
        ADDITIONAL_ITEMS.style.maxHeight="500px"
        ADDITIONAL_ITEMS_MSG.style.display="none"
    } else {
        ADDITIONAL_ITEMS.style.maxHeight="0px"
        ADDITIONAL_ITEMS_MSG.style.display="block"
        ADDITIONAL_CPU_ELE.value = "0"
        ADDITIONAL_MEMORY_ELE.value = "0"
    }
}

/**
 * Handlers
*/
const handleConfiguration = () => {
    
    /**
     * An handler that changes the configuration based on the value of os
    */
    
    CONFIGURATION_ELE.innerHTML = ''
    
    if(OS_ELE.selectedIndex === 1){
        setConfiguration(WINDOWS_SERVERS)
    } else if(OS_ELE.selectedIndex === 2) {
        setConfiguration(LINUX_SERVERS)
    } else {
        setOptions('Select an operating system to get options',CONFIGURATION_ELE)
    }
    handleConfigurationChange()
    setManagedServices()
}

const handleConfigurationChange = () => {
    
    /**
     * Handles changes for configuration
     * Sets the configuration price
     * Sets the value of storage to be displayed in additional storage block
    */
    let data;
    if(OS_ELE.selectedIndex === 1){
        data = WINDOWS_SERVERS
    } else if (OS_ELE.selectedIndex === 2){
        data = LINUX_SERVERS
    } else {
        STORAGE_COUNT_DISPLAY_ELE.innerHTML = "0"
        handleAdditionalItems()
        handleAdditionalItems()
        handleProductFamilyPrice()
        setManagedServices()
        
        return
    }
    
    STORAGE_COUNT_DISPLAY_ELE.innerHTML = data[CONFIGURATION_ELE.value].storage
    handleConfigurationPrice(data)
    handleAdditionalItems()
    handleProductFamilyPrice()
}

const handleConfigurationPrice = (data) => {
    CONFIGURATION_PRICE_ELE.innerHTML = formatPrice(data[CONFIGURATION_ELE.value].price)
    setTotalPrice()
}

const handleBandwidth = (val) =>  {
    
    /**
     * Error Handler
     * set error if value is less than 0
     * Does not throw an error if the value is 0
     * Throw an error if the value is less than 1000
    */
    
    BANDWIDTH_ERROR_ELE.style.display = (BANDWIDTH_DISPLAY_ELE.value < 0 || BANDWIDTH_DISPLAY_ELE.value > 1 && BANDWIDTH_DISPLAY_ELE.value < 1000) ?  'inline-block' : 'none'
    if(val){
        BANDWIDTH_DISPLAY_ELE.value=BANDWIDTH_BAR_ELE.value;
       
    } else {
        BANDWIDTH_BAR_ELE.value=BANDWIDTH_DISPLAY_ELE.value + 1
    }
    
    handleBandwidthPrice()
};

const handleBandwidthPrice = () => {
    BANDWIDTH_PRICE_ELE.innerHTML = formatPrice((BANDWIDTH_DISPLAY_ELE.value / 1000) * PRICE_BANDWIDTH)
    setTotalPrice()
}

const handleAdditionalStorage = () => {
    
    /**
     * Handle Error for storage
     * Handle on change -> Set the value to the nearest 100
     * Call price handler
    */ 
    
    /**
     * Error Handler
     * Throw an error if value is less than 0
     * Does not throw an error if the value is 0
     * Throw an error if the value is less than 100
    */
    ADDITIONAL_STORAGE_ERROR_ELE.style.display =(ADDITIONAL_STORAGE_ELE.value < 0 || ADDITIONAL_STORAGE_ELE.value > 0 && ADDITIONAL_STORAGE_ELE.value < 100) ? 'inline-block' : 'none' 
    
    if(ADDITIONAL_STORAGE_ELE.value.length  === 3){
        
        if(ADDITIONAL_STORAGE_ELE.value % 100 == 0 ){
            
            ADDITIONAL_STORAGE_ELE.value
        } else {
            
            ADDITIONAL_STORAGE_ELE.value = Math.round(parseInt(ADDITIONAL_STORAGE_ELE.value)/100)*100 
        }
    }
    
    handleAdditionalStoragePrice()
    
}

const handleAdditionalStoragePrice = () => {
    ADDITIONAL_STORAGE_PRICE_ELE.innerHTML = formatPrice((ADDITIONAL_STORAGE_ELE.value / 100) * PRICE_STORAGE )
    setTotalPrice()
}

const handleAdditionalCpu = () =>{
    handleAdditionalCpuPrice()
    handleProductFamilyPrice()
}

const handleAdditionalCpuPrice = () => {
    
    ADDITIONAL_CPU_PRICE_ELE.innerHTML = formatPrice(parseInt(ADDITIONAL_CPU_ELE.value) * PRICE_CPU) 
    setTotalPrice()
}

const handleAdditionalMemory = () => {
    handleAddtionalMemoryPrice()
}

const handleAddtionalMemoryPrice = () => {
    ADDITIONAL_MEMORY_PRICE_ELE.innerHTML = formatPrice(parseInt(ADDITIONAL_MEMORY_ELE.value)* PRICE_MEMORY)
    setTotalPrice()
}

const handleSqlState = () => {
    if(SQL_STATE.selectedIndex === 1){
        PRODUCT_FAMILY_ELE.style.maxHeight="200px";
    } else {
        PRODUCT_FAMILY_ELE.style.maxHeight="0px";
    }
    setManagedServices()
    handleManagedServicesPrice()
}

const handleProductFamily = () => {
    handleProductFamilyPrice()
    
}
const handleProductFamilyPrice = () => {
    /**
     * Fetch the current configuraton cpu
     * Fetch the additional cores
     * Add additional cores and current configuration CPUS
     * Muliply it with the value of product family
     * 
    */
    
    let data
    if(OS_ELE.selectedIndex === 1){
        data = WINDOWS_SERVERS
    } else if (OS_ELE.selectedIndex === 2){
        data = LINUX_SERVERS
    } else {
        PRODUCT_FAMILY_PRICE_ELE.innerHTML = 0
        return
        data = ''
    }
    if(!parseInt(PRODUCT_FAMILY[PRODUCT_FAMILY_OPTIONS_ELE.value])){
        PRODUCT_FAMILY_PRICE_ELE.innerHTML = 0
        return
    }
    const totalCpuCount = data[CONFIGURATION_ELE.value].cpu + parseInt(ADDITIONAL_CPU_ELE.value)
    const totalCost = formatPrice(((parseInt(PRODUCT_FAMILY[PRODUCT_FAMILY_OPTIONS_ELE.value])* parseInt(totalCpuCount)) + 6000)) 
    PRODUCT_FAMILY_PRICE_ELE.innerHTML = Boolean(totalCost)  ? totalCost :'0' 
    setTotalPrice()
}

const handleManagedServices= () => {
    handleManagedServicesPrice()
}

const handleManagedServicesPrice =() => {
    if(OS_ELE.selectedIndex === 0){
        return
    }
    MANAGED_SERVICES_PRICE_ELE.innerHTML = formatPrice(MANAGED_SERVICES[MANAGED_SERVICES_ELE.value])
    setTotalPrice()
}


// Onload
const onload = () =>{ 
    setOs()
    setConfiguration()
    setProductFamily()
    setManagedServices()
    handleAdditionalStoragePrice()
    handleAdditionalCpuPrice()
    handleBandwidthPrice()
    handleConfigurationChange()
    handleAdditionalMemory()
    handleProductFamilyPrice()
    handleManagedServicesPrice()
}

window.onload = onload
