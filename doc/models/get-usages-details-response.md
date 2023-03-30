
# Get Usages Details Response

## Structure

`GetUsagesDetailsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `string` | Required | Subscription Identifier | getSubscriptionId(): string | setSubscriptionId(string subscriptionId): void |
| `totalAmount` | `int` | Required | Current Invoice Amount | getTotalAmount(): int | setTotalAmount(int totalAmount): void |
| `period` | [`?GetPeriodResponse`](../../doc/models/get-period-response.md) | Optional | Period Details | getPeriod(): ?GetPeriodResponse | setPeriod(?GetPeriodResponse period): void |
| `usages` | [`ListUsagesDetailsResponse`](../../doc/models/list-usages-details-response.md) | Required | Usages Details | getUsages(): ListUsagesDetailsResponse | setUsages(ListUsagesDetailsResponse usages): void |
| `totalDiscount` | `?int` | Optional | Total discounted value | getTotalDiscount(): ?int | setTotalDiscount(?int totalDiscount): void |
| `totalIncrement` | `?int` | Optional | Total inremented value | getTotalIncrement(): ?int | setTotalIncrement(?int totalIncrement): void |

## Example (as JSON)

```json
{
  "subscription_id": "subscription_id0",
  "total_amount": 112,
  "Period": null,
  "Usages": {
    "data": [
      {
        "id": "id1",
        "quantity": 25,
        "description": "description1",
        "used_at": "2016-03-13T12:52:32.123Z",
        "created_at": "2016-03-13T12:52:32.123Z",
        "status": "status3",
        "deleted_at": null,
        "subscription_item": {
          "id": "id7",
          "description": "description7",
          "status": "status9",
          "created_at": "2016-03-13T12:52:32.123Z",
          "updated_at": "2016-03-13T12:52:32.123Z",
          "pricing_scheme": {
            "price": 3,
            "scheme_type": "scheme_type9",
            "price_brackets": [
              {
                "start_quantity": 212,
                "price": 150,
                "end_quantity": null,
                "overage_price": null
              }
            ],
            "minimum_price": null,
            "percentage": null
          },
          "discounts": [
            {
              "id": "id8",
              "value": 232.4,
              "discount_type": "discount_type6",
              "status": "status0",
              "created_at": "2016-03-13T12:52:32.123Z",
              "cycles": null,
              "deleted_at": null,
              "description": null,
              "subscription": null,
              "subscription_item": null
            }
          ],
          "increments": [
            null,
            null
          ],
          "subscription": null,
          "name": "name7",
          "quantity": null,
          "cycles": null,
          "deleted_at": null
        },
        "code": null,
        "group": null,
        "amount": null
      }
    ],
    "paging": {
      "total": 32,
      "previous": "previous0",
      "next": "next0"
    }
  },
  "total_discount": null,
  "total_increment": null
}
```

