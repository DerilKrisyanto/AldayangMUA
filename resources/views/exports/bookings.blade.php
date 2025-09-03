<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Layanan</th>
            <th>Tambahan</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $index => $booking)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->phone }} {{ $booking->email ? '(' . $booking->email . ')' : '' }}</td>
            <td>
                @foreach($booking->serviceTypes as $s)
                    - {{ $s->nama }} <br>
                @endforeach
            </td>
            <td>
                @forelse($booking->additionalTypes as $a)
                    + {{ $a->nama }} <br>
                @empty
                    -
                @endforelse
            </td>
            <td>{{ $booking->alamat }}</td>
            <td>{{ $booking->date }} {{ \Carbon\Carbon::parse($booking->time)->format('H:i') }}</td>
            <td>{{ $booking->totalharga }}</td>
            <td>{{ $booking->statusBooking->nama ?? 'Menunggu' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
