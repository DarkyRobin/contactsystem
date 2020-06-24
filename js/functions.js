async function qryData(apiName = '', apiFn = '', passedData = {}, callback, debug = false) {

    // set the return object
    let result = {success: false, data: {}, msg: ''};
  
    // if reqired object is not fulfilled, return error
    if(apiName === '' || apiFn === '' || typeof passedData !== 'object') {
      result.data = arguments;
      result.msg = 'Parameter error!';
    }
  
    // fetch data from API
    const fetcheddata = await fetch(`${getAPIURL()}${apiName}.php`, {
      method: 'POST',
      headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({ data: {...{'f': apiFn}, ...passedData} })
    }).catch(error => {
      result.data = error;
      result.msg = 'Fetch error!';
    });
    
    if(fetcheddata != undefined) {
      if(fetcheddata.status !== 200) { // if fetching failed
        result.data = {fetchbody: arguments, fetcheddata: fetcheddata};
        result.msg = fetcheddata.statusText;
      } else { // if fetch success
        result.success = true;
        result.data = await fetcheddata.json();
      }
    }
    if(debug) console.log(result); // if debug mode is enabled, console result
    if(callback == undefined) return result; // if callback is not used, return result directly 
    callback(result.data); // if callback is used, call function with the data
  }