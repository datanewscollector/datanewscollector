// Sample data for the table
const data = [
    { col1: 'data1', col2: 'data2', col3: 'data3', col4: 'data4' },
    { col1: 'data5', col2: 'data6', col3: 'data7', col4: 'data8' },
    { col1: 'data10', col2: 'data11', col3: 'data12', col4: 'data13' },
    { col1: 'data14', col2: 'data15', col3: 'data16', col4: 'data17' },
    { col1: 'data18', col2: 'data19', col3: 'data20', col4: 'data21' },
    { col1: 'data22', col2: 'data23', col3: 'data24', col4: 'data25' },
    { col1: 'data26', col2: 'data27', col3: 'data28', col4: 'data29' },
    { col1: 'data30', col2: 'data31', col3: 'data32', col4: 'data33' },
    { col1: 'data34', col2: 'data35', col3: 'data36', col4: 'data37' },
    { col1: 'data38', col2: 'data39', col3: 'data40', col4: 'data41' },
    { col1: 'data42', col2: 'data43', col3: 'data44', col4: 'data45' },
    { col1: 'data46', col2: 'data47', col3: 'data48', col4: 'data49' },
    { col1: 'data50', col2: 'data51', col3: 'data52', col4: 'data53' },
    { col1: 'data54', col2: 'data55', col3: 'data56', col4: 'data57' },
    { col1: 'data58', col2: 'data59', col3: 'data60', col4: 'data61' },
    { col1: 'data62', col2: 'data63', col3: 'data64', col4: 'data65' },

  ];
  
  const tableBody = document.getElementById('table-body');
  const prevPageBtn = document.querySelector('.prev-page');
  const nextPageBtn = document.querySelector('.next-page');
  
  let currentPage = 0;
  const rowsPerPage = 5;
  
  function renderTable() {
    tableBody.innerHTML = ''; // Clear the table body
    const startIndex = currentPage * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const rowsToRender = data.slice(startIndex, endIndex);
  
    rowsToRender.forEach(row => {
      const tr = document.createElement('tr');
      for (const col in row) {
        const td = document.createElement('td');
        td.textContent = row[col];
        tr.appendChild(td);
      }
      tableBody.appendChild(tr);
    });
  }
  
  prevPageBtn.addEventListener('click', () => {
    if (currentPage > 0) {
      currentPage--;
      renderTable();
    }
  });
  
  nextPageBtn.addEventListener('click', () => {
    if (currentPage < Math.floor(data.length / rowsPerPage)) {
      currentPage++;
      renderTable();
  }
});

renderTable();
