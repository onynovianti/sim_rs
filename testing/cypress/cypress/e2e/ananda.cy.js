Cypress.on('uncaught:exception', (err, runnable) => {
    return false;
  });

  beforeEach(() => {
    cy.restoreLocalStorage();
  });

  afterEach(() => {
    cy.saveLocalStorage();
  });

describe('LOGIN', () => {
    it('login berhasil', () => {
        cy.visit('http://127.0.0.1:8000/')
            cy.get('#exampleInputEmail1').click()
            cy.get('#exampleInputEmail1').type('narendra')
            cy.get('#exampleInputPassword1').click()
            cy.get('#exampleInputPassword1').type('narendra')
            cy.get('#exampleFormControlSelect2').select('Admin')
            cy.get('.btn').click()
        })

    it('print berhasil', () => {
        cy.get('.btn-otline-dark').click()
    })
})

// CRUD data karyawan
describe('2. Tambah Data Karyawan', () => {
    it('login', () => {
        cy.visit('http://127.0.0.1:8000/')
            cy.get('#exampleInputEmail1').click()
            cy.get('#exampleInputEmail1').type('narendra')
            cy.get('#exampleInputPassword1').click()
            cy.get('#exampleInputPassword1').type('narendra')
            cy.get('#exampleFormControlSelect2').select('Admin')
            cy.get('.btn').click()
    });

    it('tambah karyawan gagal : hanya diisi field nama dan jenis kelamin', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get('.card-description > .btn').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu Sekar')
        cy.get('#jenisKelamin2').click()
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah karyawan gagal : hanya diisi field nama, jenis kelamin dan username', () => {
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu Sekar')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('karyawan 1')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah karyawan gagal : hanya diisi field nama, jenis kelamin, username dan password', () => {
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu Sekar')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('karyawan 1')
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('123456789')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah karyawan gagal : hanya diisi field nama, jenis kelamin, username, password dan alamat', () => {
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu Sekar')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('karyawan 1')
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('123456789')
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Anggrek')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah karyawan gagal : hanya diisi field nama, jenis kelamin, username, password, alamat dan tanggal lahir', () => {
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu Sekar')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('karyawan 1')
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('123456789')
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Anggrek')
        cy.get(':nth-child(4) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('2002-06-18')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(4) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah karyawan berhasil', () => {
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu Sekar')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('karyawan 1')
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('123456789')
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Anggrek')
        cy.get(':nth-child(4) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('2002-06-18')
        cy.get(':nth-child(7) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('085341234567')
        cy.get('.form-sample > .btn-primary').click()
    })
})

describe('2. Edit Data Karyawan', () => {
    it('login', () => {
        cy.visit('http://127.0.0.1:8000/')
            cy.get('#exampleInputEmail1').click()
            cy.get('#exampleInputEmail1').type('narendra')
            cy.get('#exampleInputPassword1').click()
            cy.get('#exampleInputPassword1').type('narendra')
            cy.get('#exampleFormControlSelect2').select('Admin')
            cy.get('.btn').click()
    });
    it('edit karyawan gagal : hanya diisi field nama dan jenis kelamin', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu')
        cy.get('#membershipRadios2').click()
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('edit karyawan gagal : hanya diisi field nama, jenis kelamin dan alamat', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Mawar')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('edit karyawan gagal : hanya diisi field nama, jenis kelamin, alamat dan tempat lahir', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Mawar')
        cy.get(':nth-child(5) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('Blitar')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(5) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('edit karyawan berhasil', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Ananda Ayu')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Mawar')
        cy.get(':nth-child(5) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('Blitar')
        cy.get(':nth-child(8) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('089526545324')
        cy.get('.form-sample > .btn-primary').click()
    })
    it('Delete data berhasil', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-danger').click()
    })
})

// CRUD Pasien
describe('LOGIN', () => {
    it('login berhasil', () => {
        cy.visit('http://127.0.0.1:8000/')
        cy.get('#exampleInputEmail1').click()
        cy.get('#exampleInputEmail1').type('setiawananda')
        cy.get('#exampleInputPassword1').click()
        cy.get('#exampleInputPassword1').type('1234567890')
        cy.get('#exampleFormControlSelect2').select('Karyawan')
        cy.get('.btn').click()
    })
})

// CRUD data Pasien
describe('3. Tambah Data Pasien', () => {
    it('tambah pasien gagal : hanya diisi field nama dan jenis kelamin', () => {
        cy.get('#pasien > .nav > .nav-item > .nav-link').click()
        cy.get('.card-description > .btn').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Nurul Jannah')
        cy.get('#jenisKelamin2').click()
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah pasien gagal : hanya diisi field nama, jenis kelamin dan alamat', () => {
        cy.get('#pasien > .nav > .nav-item > .nav-link').click()
        cy.get('.card-description > .btn').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Nurul Jannah')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Panjahitan')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah pasien gagal : hanya diisi field nama, jenis kelamin, alamat dan tanggal lahir', () => {
        cy.get('#pasien > .nav > .nav-item > .nav-link').click()
        cy.get('.card-description > .btn').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Nurul Jannah')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Panjahitan')
        cy.get(':nth-child(3) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('2000-10-12')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(3) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('tambah pasien berhasil : semua data diisi', () => {
        cy.get('#pasien > .nav > .nav-item > .nav-link').click()
        cy.get('.card-description > .btn').click()
        cy.get(':nth-child(3) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Nurul Jannah')
        cy.get('#jenisKelamin2').click()
        cy.get(':nth-child(5) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Panjahitan')
        cy.get(':nth-child(3) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('2000-10-12')
        cy.get(':nth-child(5) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('0812345678901')
        cy.get('.form-sample > .btn-primary').click()
    })
})

describe('3. Edit Data Pasien', () => {
    it('edit pasien gagal : hanya diisi field nama dan jenis kelamin', () => {
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Atika Azahra')
        cy.get('#membershipRadios2').click()
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('edit pasien gagal : hanya diisi field nama, jenis kelamin dan alamat', () => {
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Atika Azahra')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Ambarawa')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('edit pasien gagal : hanya diisi field nama, jenis kelamin, alamat dan tanggal lahir', () => {
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Atika Azahra')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Ambarawa')
        cy.get(':nth-child(4) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('1998-05-07')
        cy.get('.form-sample > .btn-primary').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').clear({force: true})
        cy.get(':nth-child(4) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').clear({force: true})
    })
    it('edit pasien berhasil : semua data diisi', () => {
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Atika Azahra')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(7) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Ambarawa')
        cy.get(':nth-child(4) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('1998-05-07')
        cy.get(':nth-child(7) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('08417892355')
        cy.get('.form-sample > .btn-primary').click()
    })
})

describe('3. Delete data karyawan', () => {
    it('Delete data berhasil', () => {
        cy.get('#pasien > .nav > .nav-item > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-danger').click()
    })
})

// CRUD Transaksi
describe('4. Tambah Transaksi', () => {
    it('transaksi berhasil', () => {
        cy.get('#transaksi > .nav > .nav-item > .nav-link').click()
        cy.get('.card-description > .btn').click()
        cy.get('#dokter').select('Ony Novianti')
        cy.get('.col-sm-9 > #pasien').select('Maida Lailasari M.Ak')
        cy.get('#obat').select('Anestesia')
        cy.get('.form-sample > .btn-primary').click()
    })
})

// logout
describe('5. Logout', () => {
    it('logout berhasil', () => {
        cy.get('.img-xs').select('Sign Out')
        cy.get('.dropdown-item').click()
    })
})

